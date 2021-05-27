using Agenda2068676.Models;
using System;
using System.Collections.Generic;
using System.Data.Entity;
using System.Linq;
using System.Net;
using System.Web;
using System.Web.Mvc;

namespace Agenda2068676.Controllers
{
    [Authorize]
    public class AcudientesController : Controller
    {
        //Objeto
        private Agenda2068676Context db = new Agenda2068676Context();


        // GET: Acudiente
        [HttpGet]
        public ActionResult Index()
        {
            //Tipo de dato que retornar ActionResult
            return View(db.Acudientes.ToList()); /*Select * from */
        }

        [HttpGet]
        public ActionResult Create()
        {
            return View();
        }

        [HttpPost]
        public ActionResult Create(Acudiente acudiente)
        {
            if (ModelState.IsValid)
            {
                try
                {
                    db.Acudientes.Add(acudiente); /*insert into*/
                    db.SaveChanges(); /*SelectList genera el valor indentity para el campo AprendizId, guarda la información*/
                }
                catch (Exception ex)
                {
                    if (ex.InnerException != null && ex.InnerException.InnerException != null &&
                        ex.InnerException.InnerException.Message.Contains("IndexDocumento"))
                    {
                        ViewBag.Error = "El documento ya se encuentra registrado";
                    }
                    else
                    {
                        ViewBag.Error = ex.Message;
                    }
                }
                return RedirectToAction("Index");
            }

            return View(acudiente);
        }

        [HttpGet]
        public ActionResult Edit(int? id) /*parametro nulable: Enviar el parametro es opcional*/
        {
            if (id.Equals(null))
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            Acudiente acudiente = db.Acudientes.Find(id);

            if (acudiente.Equals(null))
            {
                return HttpNotFound();
            }
            return View(acudiente);

        }

        [HttpPost]
        public ActionResult Edit(Acudiente acudiente) /*parametro nulable: Enviar el parametro es opcional*/
        {
            if (ModelState.IsValid)
            {
                db.Entry(acudiente).State = EntityState.Modified; /* update */
                //Busca en la bd y compara si hay llave primaria igual a la de el objeto. Si hay diferencia modifica el estado del objeto almacenado apartir del objeto que llegó a los parametros.
                //    el estado.
                db.SaveChanges(); /* guarda la información */
            }
            else
            {
                return View(acudiente);
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
            Acudiente acudiente = db.Acudientes.Find(id);

            if (acudiente.Equals(null))
            {
                return HttpNotFound();
            }
            return View(acudiente);
        }

        [HttpGet]
        public ActionResult Delete(int? id)
        {
            if (id.Equals(null))
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            Acudiente acudiente = db.Acudientes.Find(id);

            if (acudiente.Equals(null))
            {
                return HttpNotFound();
            }
            return View(acudiente);
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
            Acudiente acudiente = db.Acudientes.Find(id);

            try
            {
                //Este try intenta, y si se puede, hace lo siguiente
                db.Acudientes.Remove(acudiente); /* delete from aprendiz where AprendirId = id*/
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
                }
                else
                {
                    //Por si lo detiene otro error diferente de uno a la integridad referencial
                    ViewBag.Error = ex.Message;
                }
                return View(acudiente);
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