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
    public class AprendizsController : Controller
    {

        //Objeto
        private Agenda2068676Context db = new Agenda2068676Context();

        // GET: Aprendizs
        [HttpGet]
        public ActionResult Index()
        {
            var aprendizs = db.Aprendizs.Include(a => a.Ficha); /*recupera los datos de la relación entre aprendiz y ficha*/
            //Tipo de dato que retornar ActionResult
            return View(db.Aprendizs.ToList()); /*Select * from aprendizs*/
        }

        [Authorize]
        [HttpGet]
        public ActionResult Create()
        {
            ViewBag.FichaId = new SelectList(db.Fichas, "FichaId", "Codigo"); /*llamada al viewbag*/
            //Aquí se optiene el codigo de la ficha y se almacena en viewbag
            //ViewBag es un objeto temporal de la vista en la que se ejecuta
            return View();
        }

        //[HttpPost]
        //public ActionResult Create(Aprendiz aprendiz)
        //{
            
        //    if (ModelState.IsValid)
        //    {
        //        /*bool existe = ValidarDocumento(aprendiz);*/ // Activa la función validarDocumento que busca si existe otro igual en la base de datos.
        //        bool existeCedula = ValidarCedula(aprendiz);
        //        bool existeCorreo = ValidarCorreo(aprendiz);

        //        if (existeCedula)
        //        {
        //            ViewBag.Error = "El documento ya se encuentra registrado";
        //            ViewBag.FichaId = new SelectList(db.Fichas, "FichaId", "Codigo", aprendiz.FichaId);
        //            return View(aprendiz);
        //        }
                
        //        if (existeCorreo)
        //        {
        //            ViewBag.Error = "El correo ya se encuentra registrado";
        //            ViewBag.FichaId = new SelectList(db.Fichas, "FichaId", "Codigo", aprendiz.FichaId);
        //            return View(aprendiz);
        //        }

        //        db.Aprendizs.Add(aprendiz); /*insert into*/
        //        db.SaveChanges(); /*SelectList genera el valor indentity para el campo AprendizId, guarda la información*/
        //    }
        //    else
        //    {
        //        return View(aprendiz);
        //    }

        //    ViewBag.FichaId = new SelectList(db.Fichas, "FichaId", "Codigo", aprendiz.FichaId); /*llamada al viewbag*/
        //    //Es como un select Codigo from Fichas where FichaId = aprendiz.FichaId (ósea la ficha del aprendiz)
        //    return RedirectToAction("Index");


        //}

        [HttpPost]
        public ActionResult Create(Aprendiz aprendiz)
        {
            if (ModelState.IsValid)
            {
                try
                {
                    db.Aprendizs.Add(aprendiz);
                    db.SaveChanges();
                }
                catch (Exception ex)
                {
                    if (ex.InnerException != null && ex.InnerException.InnerException != null &&
                        ex.InnerException.InnerException.Message.Contains("IndexDocumento"))
                    {
                        ViewBag.Error = "El documento ya se encuentra registrado";
                        ViewBag.FichaId = new SelectList(db.Fichas, "FichaId", "Codigo", aprendiz.FichaId);
                    }
                    else
                    {
                        ViewBag.Error = ex.Message;
                    }
                    return View(aprendiz);
                }
                ViewBag.FichaId = new SelectList(db.Fichas, "FichaId", "Codigo", aprendiz.FichaId);
                return RedirectToAction("Index");
            }

            return View(aprendiz);
        }

        [HttpGet]
        public ActionResult Edit(int? id) /*parametro nulable: Enviar el parametro es opcional*/
        {
            if (id.Equals(null))
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            Aprendiz aprendiz = db.Aprendizs.Find(id);

            if (aprendiz.Equals(null))
            {
                return HttpNotFound();
            }
            ViewBag.FichaId = new SelectList(db.Fichas, "FichaId", "Codigo", aprendiz.FichaId); /*llamada al viewbag*/
            return View(aprendiz);

        }

        

            [HttpPost]
        public ActionResult Edit(Aprendiz aprendiz) /*parametro nulable: Enviar el parametro es opcional*/
        {
            if (ModelState.IsValid)
            {
                try
                {
                    db.Entry(aprendiz).State = EntityState.Modified; /* update */
                    //Busca en la bd y compara si hay llave primaria igual a la de el objeto. Si hay diferencia modifica el estado del objeto almacenado apartir del objeto que llegó a los parametros.
                    //    el estado.
                    db.SaveChanges(); /* guarda la información */
                }
                catch (Exception ex)
                {

                    if (ex.InnerException != null && ex.InnerException.InnerException != null &&
                        ex.InnerException.InnerException.Message.Contains("IndexDocumento"))
                    {
                        ViewBag.Error = "El documento ya se encuentra registrado";
                        ViewBag.FichaId = new SelectList(db.Fichas, "FichaId", "Codigo", aprendiz.FichaId);
                    }
                    else
                    {
                        ViewBag.Error = ex.Message;
                    }
                    return View(aprendiz);
                }
                ViewBag.FichaId = new SelectList(db.Fichas, "FichaId", "Codigo", aprendiz.FichaId); /*llamada al viewbag*/
                return RedirectToAction("Index");
            }
            else
            {
                return View(aprendiz);
            }
           
        }

        [HttpGet]
        public ActionResult Details(int? id)
        {
            if (id.Equals(null))
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            Aprendiz aprendiz = db.Aprendizs.Find(id);

            if (aprendiz.Equals(null))
            {
                return HttpNotFound();
            }
            return View(aprendiz);
        }

        [HttpGet]
        public ActionResult Delete(int? id)
        {
            if (id.Equals(null))
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            Aprendiz aprendiz = db.Aprendizs.Find(id);

            if (aprendiz.Equals(null))
            {
                return HttpNotFound();
            }
            return View(aprendiz);
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
            Aprendiz aprendiz = db.Aprendizs.Find(id);

            if (aprendiz == null)
            {
                return HttpNotFound();
            }
            else
            {
                db.Aprendizs.Remove(aprendiz); /* delete from aprendiz where AprendirId = id*/
                //Busca en la bd y compara si hay llave primaria igual a la de el objeto. Si no hay diferencia elimina el estado del objeto almacenado apartir del objeto que llegó a los parametros.
                //    el estado.
                db.SaveChanges(); /* guarda la información */
            }

            return RedirectToAction("Index");
        }

        //Función para validar si existe otro aprendiz con el mismo documento
        public bool ValidarDocumento(Aprendiz objAprendiz)
        {
            bool ex = false;
            List<Aprendiz> lista = db.Aprendizs.ToList(); // almacena en la variable lista todos los aprendice que hay en la base de datos
            foreach (Aprendiz objApr in lista)
            {
                if (objApr.Documento == objAprendiz.Documento)
                {
                    ex = true;
                    break;
                }
            }

            return ex;
        }


        // Función para validar la cedula del aprendiz
        public bool ValidarCedula(Aprendiz objAprendiz)
        {
            bool existe = false;
            //Busca el aprendiz cuando el documento en la base de datos sea igual al documento 
            //del objeto almacenado en la función y rompe la cadena con la primera coincidencia
            var apr = db.Aprendizs.Where(ap => ap.Documento == objAprendiz.Documento).FirstOrDefault();
            if (apr != null)
            {
                existe = true;
            }
            return existe;
        } 
        
        // Función para validar la cedula del aprendiz
        public bool ValidarCorreo(Aprendiz objAprendiz)
        {
            bool existe = false;
            //Busca el aprendiz cuando el documento en la base de datos sea igual al documento 
            //del objeto almacenado en la función y rompe la cadena con la primera coincidencia
            var apr = db.Aprendizs.Where(ap => ap.Correo== objAprendiz.Correo).FirstOrDefault();
            if (apr != null)
            {
                existe = true;
            }
            return existe;
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