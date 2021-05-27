using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

using System.ComponentModel.DataAnnotations;

namespace Agenda2068676.Models
{
    public class Ficha
    {
        [Key]
        public int FichaId { get; set; }

        [Required(ErrorMessage = "El campo es {0} obligatorio")] 
        [StringLength(12, MinimumLength = 3, ErrorMessage = "El valor ingresado debe estar entre {1} y {0} caracteres")] 
        public string Codigo { get; set; }

        public string Especialidad { get; set; }

        //establecer la relacion con aprendiz
        public virtual ICollection<Aprendiz>Aprendizs { get; set; }

        //ICollection hace el papel de list
        //Esto se hace por cada relación, en este caso de uno a muchos

        //relación con centro
        public int CentroId { get; set; } /*Llave foranea*/
        public virtual Centro Centro { get; set; } /*representación de la clase centro*/

    }
}