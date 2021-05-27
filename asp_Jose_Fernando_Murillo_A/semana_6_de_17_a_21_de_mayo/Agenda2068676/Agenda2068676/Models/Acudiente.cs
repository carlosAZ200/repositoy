using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;
using System.Linq;
using System.Web;

namespace Agenda2068676.Models
{
    public class Acudiente
    {
        [Key]
        public int AcudienteId { get; set; }
        [Required(ErrorMessage = "El campo es {0} obligatorio")] /*{0} toma la primera variable del mismo elemento*/
        [StringLength(15, MinimumLength = 6, ErrorMessage = "El valor ingresado debe estar entre 6 y 15 caracteres")] /*campo entre 6 y 15*/
        [Index("IndexDocumento", IsUnique = true)]
        public string Documento { get; set; }
        [Required(ErrorMessage = "El campo es {0} obligatorio")] /*{0} toma la primera variable del mismo elemento*/
        [StringLength(50, MinimumLength = 3, ErrorMessage = "El valor ingresado debe estar entre 6 y 15 caracteres")] /*campo entre 6 y 15*/

        public string Nombres { get; set; }
        [Required(ErrorMessage = "El campo es {0} obligatorio")] /*{0} toma la primera variable del mismo elemento*/
        [StringLength(50, MinimumLength = 3, ErrorMessage = "El valor ingresado debe estar entre 6 y 15 caracteres")] /*campo entre 6 y 15*/

        public string Apellidos { get; set; }
        public string Direccion { get; set; }
        [Required(ErrorMessage = "El campo es {0} obligatorio")] /*{0} toma la primera variable del mismo elemento*/
        [DataType(DataType.EmailAddress)]
        [Index("IndexCorreo", IsUnique = true)]
        public string Correo { get; set; }
        [Required(ErrorMessage = "El campo es {0} obligatorio")] /*{0} toma la primera variable del mismo elemento*/
        public string Celular { get; set; }

        //establecer la relación aprendiz
        public virtual ICollection<Aprendiz> Aprendizs { get; set; }
    }
}