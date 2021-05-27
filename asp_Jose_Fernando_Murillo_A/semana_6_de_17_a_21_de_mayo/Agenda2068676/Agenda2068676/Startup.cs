using Microsoft.Owin;
using Owin;

[assembly: OwinStartupAttribute(typeof(Agenda2068676.Startup))]
namespace Agenda2068676
{
    public partial class Startup
    {
        public void Configuration(IAppBuilder app)
        {
            ConfigureAuth(app);
        }
    }
}
