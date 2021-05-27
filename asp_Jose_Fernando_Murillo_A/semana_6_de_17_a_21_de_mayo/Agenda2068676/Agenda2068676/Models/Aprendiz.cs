using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;

namespace Agenda2068676.Models
{
    public class Aprendiz
    {
        //Comando para hacer getset más rápido, escribir: prop + tab(tecla)

        [Key]
        public int AprendizId { get; set; }

        [Required(ErrorMessage = "El campo es {0} obligatorio")] /*{0} toma la primera variable del mismo elemento*/
        [StringLength(15, MinimumLength = 6, ErrorMessage = "El valor ingresado debe estar entre 6 y 15 caracteres")] /*campo entre 6 y 15*/
        [Index("IndexDocumento", IsUnique = true)]
        public string Documento { get; set; }

        [Required(ErrorMessage = "El campo es {0} obligatorio")] /*{0} toma la variable de documento*/
        [StringLength(35, MinimumLength = 3, ErrorMessage = "El campo {0} debe tener entre {2} y {1} ")] /*campo entre 3 y 35*/ /*{2} y {1} toma los valores de 3 y 35 respectivamente */
        public string Nombre { get; set; }

        [Required(ErrorMessage = "El campo es {0} obligatorio")] /*{0} toma la variable del nombre*/
        [StringLength(35, MinimumLength = 3, ErrorMessage = "El campo {0} debe tener entre {2} y {1} ")] /*campo entre 3 y 35*/ /*{2} y {1} toma los valores de 3 y 35 respectivamente */
        public string Apellidos { get; set; }

        [Required(ErrorMessage = "El campo es {0} obligatorio")] /*{0} toma la primera variable del mismo elemento*/
        [Index("IndexCorreo", IsUnique = true)]
        public string Correo { get; set; }
        public string Celular { get; set; }

        //Para que la bd se actulice en herramientas/administrado paquetes nugets/consola e 
        //    ingresar el siguiente comando Enable-Migrations -ContextTypeName Agenda2068676Context -EnableAutomaticMigrations

        public int FichaId { get; set; } /*Llave foranea*/
        public virtual Ficha Ficha { get; set; } /*representación de la clase ficha*/

        //relación con acudiente
        public int AcudienteId { get; set; } /*Llave foranea*/
        public virtual Acudiente Acudiente { get; set; } /*representación de la clase ficha*/

    }
}