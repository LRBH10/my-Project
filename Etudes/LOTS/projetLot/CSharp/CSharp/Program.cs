using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

using General;
using Informatique;
using Chimie;
namespace CSharp
{
    class Program
    {
        static void afficher(object o)
        {
            Console.WriteLine(o);
        }
        static void Main(string[] args)
        {
            		// les Graphe
		Graphe rzo1 = new Reseau("RZO1");
		Graphe rzo2 = new Reseau("RZO2");
		Graphe mol = new Molecule("MOL");

		afficher("les Graphes de Simulation\n" + rzo1 + "\n" + rzo2 + "\n"
				+ mol);
		// les sommets
		Sommet at1 = new Atome("AT1");
		Sommet at2 = new Atome("AT2");

		Sommet or1 = new Ordinateur("OR1");
		Sommet or2 = new Ordinateur("OR2");
		Sommet or3 = new Ordinateur("OR3");
		Sommet or4 = new Ordinateur("OR4");
		Sommet or5 = new Ordinateur("OR5");

		afficher("\n----------\nles Sommets de Simulation\n" + at1 + "\n" + at2
				+ "\n" + or1 + "\n" + or2 + "\n" + or3 + "\n" + or4 + "\n"
				+ or5 + "\n");

		Aret li1 = new Liaison("LI1");
		Aret ca1 = new Cable("CA1");
		Aret ca2 = new Cable("CA2");
		Aret ca3 = new Cable("CA3");

		afficher("\n----------\nles Arets de Simulation\n" + li1 + "\n" + ca2
				+ "\n" + ca1 + "\n" + ca2 + "\n" + ca3 + "\n");

		// Simulation
		afficher("SIMULATIONS\n ");
		// 1 insertion Liaison (Atome, Ordi) Non OK
		afficher("TEST 1 \n" + li1.insererSommets(at1, or1));
		// 2 insertion Liaison (Atome, Atome (le meme)) NOn OK
		afficher("TEST 2 \n" + li1.insererSommets(at1, at1));
		// 3 insertion Liaison (Atome, Atome) OK
		afficher("TEST 3 \n" + li1.insererSommets(at1, at2));
		// 4 insertion RZO (Ord) Ok
		afficher("TEST 4\n" + rzo1.insererSommet(or1));
		// 5 insertion RZO (Atome) Non OK
		afficher("TEST 5\n" + rzo1.insererSommet(at1));
		// 6 insertion RZO (Laison) Non OK
		afficher("TEST 6\n" + rzo1.insererAret(li1));
		// 7 insertion CA1 (sans pere) (or1 avec (PERE), or2 Sans pere) Non OK
		afficher("TEST 7\n" + ca1.insererSommets(or1, or2));
		// 8 insertion de CA1 sans Sommets Non OK
		afficher("TEST 8\n" + rzo1.insererAret(ca1));
		// 9 insertion CA1 (Ord (pere), Ord (meme Pere)) OK
		or2.setGraphe(rzo1);
		afficher("TEST 9\n" + ca1.insererSommets(or1, or2));
		// 10 insertion RZO2 (Cable1)  non OK
		afficher("TEST 10\n" + rzo2.insererAret(ca1));
        bool test = or1 is Sommet;
        Console.WriteLine(test);

        Console.ReadLine();
	}
    }
}
