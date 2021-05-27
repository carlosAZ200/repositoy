using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;
using System.Linq;
using System.Web;

namespace Agenda2068676.Models
{
    public class Centro
    {
        [Key]
        public int CentroId { get; set; }
        
        [Required(ErrorMessage = "El campo es {0} obligatorio")] /*{0} toma la primera variable del mismo elemento*/
        [StringLength(50, MinimumLength = 3, ErrorMessage = "El valor ingresado debe estar entre 6 y 15 caracteres")] /*campo entre 6 y 15*/
        [Index("IndexNombre", IsUnique = true)]
        public string Nombre { get; set; }

        [Required(ErrorMessage = "El campo es {0} obligatorio")] /*{0} toma la primera variable del mismo elemento*/
        [StringLength(50, MinimumLength = 10, ErrorMessage = "El campo {0} debe tener entre {2} y {1} ")]
        public string Subdirector { get; set; }

        [Required(ErrorMessage = "El campo es {0} obligatorio")] /*{0} toma la primera variable del mismo elemento*/
        [StringLength(50, MinimumLength = 10, ErrorMessage = "El campo {0} debe tener entre {2} y {1} ")] 
        public string Coordinador { get; set; }

        //establecer la relación fichas
        public virtual ICollection<Ficha> Fichas { get; set; }
    }
}