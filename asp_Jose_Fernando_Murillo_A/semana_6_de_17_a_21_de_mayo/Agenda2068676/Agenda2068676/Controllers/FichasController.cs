using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

using Agenda2068676.Models;
using System.Net;
using System.Data.Entity;

namespace Agenda2068676.Controllers
{
    [Authorize]
    public class FichasController : Controller
    {
        //Objeto
        private Agenda2068676Context db = new Agenda2068676Context();


        // GET: Fichas
        [HttpGet]
        public ActionResult Index()
        {
            //Tipo de dato que retornar ActionResult
            return View(db.Fichas.ToList()); /*Select * from aprendizs*/
        }

        [HttpGet]
        public ActionResult Create()
        {
            return View();
        }

        [HttpPost]
        public ActionResult Create(Ficha ficha)
        {
            if (ModelState.IsValid)
            {
                db.Fichas.Add(ficha); /*insert into*/
                db.SaveChanges(); /*SelectList genera el valor indentity para el campo AprendizId, guarda la información*/
            }
            else
            {
                return View(ficha);
            }

            return RedirectToAction("Index");
        }

        [HttpGet]
        public ActionResult Edit(int? id) /*parametro nulable: Enviar el parametro es opcional*/
        {
            if (id.Equals(null))
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            Ficha ficha = db.Fichas.Find(id);

            if (ficha.Equals(null))
            {
                return HttpNotFound();
            }
            return View(ficha);

        }

        [HttpPost]
        public ActionResult Edit(Ficha ficha) 
        {
            if (ModelState.IsValid)
            {
                db.Entry(ficha).State = EntityState.Modified; /* update */
                //Busca en la bd y compara si hay llave primaria igual a la de el objeto. Si hay diferencia modifica el estado del objeto almacenado apartir del objeto que llegó a los parametros.
                //    el estado.
                db.SaveChanges(); /* guarda la información */
            }
            else
            {
                return View(ficha);
            }
            return RedirectToAction("Index");
        }

        [HttpGet]
        public ActionResult Details(int? id)
        {
            if (id.Equals(null))
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            Ficha ficha = db.Fichas.Find(id);

            if (ficha.Equals(null))
            {
                return HttpNotFound();
            }
            return View(ficha);
        }

        [HttpGet]
        public ActionResult Delete(int? id)
        {
            if (id.Equals(null))
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            Ficha ficha = db.Fichas.Find(id);

            if (ficha.Equals(null))
            {
                return HttpNotFound();
            }
            return View(ficha);
        }

        //[HttpPost]
        //public ActionResult Delete(Aprendiz aprendiz)
        //{
        //    aprendiz = db.Aprendizs.Find(aprendiz.AprendizId);

        //    if (aprendiz == null)
        //    {
        //        return HttpNotFound();
        //    }
        //    else
        //    {
        //        db.Aprendizs.Remove(aprendiz); /* delete from aprendiz where AprendirId = id*/
        //        //Busca en la bd y compara si hay llave primaria igual a la de el objeto. Si no hay diferencia elimina el estado del objeto almacenado apartir del objeto que llegó a los parametros.
        //        //    el estado.
        //        db.SaveChanges(); /* guarda la información */
        //    }

        //    return RedirectToAction("Index");
        //}

        [HttpPost]
        public ActionResult Delete(int id)
        {
            //var aprendiz = db.Aprendizs.Find(id);
            Ficha ficha = db.Fichas.Find(id);

            try
            {
                //Este try intenta, y si se puede, hace lo siguiente
                db.Fichas.Remove(ficha); /* delete from aprendiz where AprendirId = id*/
                //Busca en la bd y compara si hay llave primaria igual a la de el objeto. Si no hay diferencia elimina el estado del objeto almacenado apartir del objeto que llegó a los parametros.
                //    el estado.
                db.SaveChanges(); /* guarda la información */
            }
            catch (Exception ex)
            {
                if (ex.InnerException != null && ex.InnerException.InnerException != null && ex.InnerException.InnerException.Message.Contains("REFERENCE"))
                {
                    //Quiere decir que se viola la integridad referencial
                    ViewBag.Error = "No se pueden eliminar elementos con integridad referencial";
                    //Quiere decir que no permitirá eliminar la ficha siempre y cuando no 
                    //se haya eliminado ya todos los aprendices que pertenecen a dicha ficha 
                }
                else
                {
                    //Por si lo detiene otro error diferente de uno a la integridad referencial
                    ViewBag.Error = ex.Message;
                }
                return View(ficha);
            }

            //if (ficha == null)
            //{
            //    return HttpNotFound();
            //}
            //else
            //{
                
            //}

            return RedirectToAction("Index");
        }

        //Cierra o deshace la conexión con la base de datos
        protected override void Dispose(bool disposing)
        {
            //override sobreescribir
            //base.Dispose(disposing);

            if (disposing)
            {
                db.Dispose();
                //Desconectarse o deshacer Dispose()
            }
            base.Dispose(disposing);
        }
    }
}