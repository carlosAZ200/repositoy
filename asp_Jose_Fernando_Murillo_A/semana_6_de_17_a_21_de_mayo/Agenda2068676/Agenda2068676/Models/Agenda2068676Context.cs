using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

using System.Data.Entity;
using System.Data.Entity.ModelConfiguration.Conventions;

namespace Agenda2068676.Models
{
    public class Agenda2068676Context : DbContext
    {
        //Constructor por defecto
        public Agenda2068676Context() : base("DefaultConnection") /*llamado al constructor de la clase Dbcontext*/
        {
            //:base("DefaultConnection") envio de argumento a la clase Dbcontext constructor
        }

        protected override void OnModelCreating(DbModelBuilder modelBuilder)
        {
            //se sobre escribe el metodo onmodelcreating para hace una verificacón del estado en la bd
            modelBuilder.Conventions.Remove<OneToManyCascadeDeleteConvention>(); /*impide eliminación en cascada*/
            //Ejemplo: La elminación de los aprendices si se elimina la ficha, para evitar la incoherencia
        }

        //Definir los atributos
        public DbSet<Aprendiz> Aprendizs { get; set; }
        //Accessing a DbSet property on a context object represent a starting query that returns all entities of the specified type
        public DbSet<Ficha> Fichas { get; set; }

        public DbSet<Acudiente> Acudientes { get; set; }

        public DbSet<Centro> Centros { get; set; }
    }
}