using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using Windows.Foundation;
using Windows.Foundation.Collections;
using Windows.UI.Xaml;
using Windows.UI.Xaml.Controls;
using Windows.UI.Xaml.Controls.Primitives;
using Windows.UI.Xaml.Data;
using Windows.UI.Xaml.Input;
using Windows.UI.Xaml.Media;
using Windows.UI.Xaml.Navigation;

// The Blank Page item template is documented at http://go.microsoft.com/fwlink/?LinkId=234238

using WebServiceSOAP;

namespace MastroAppNtiers
{
    /// <summary>
    /// An empty page that can be used on its own or navigated to within a Frame.
    /// </summary>
    public sealed partial class BlankPage : Page
    {
        /// <summary>
        /// DEclaration de la Consultation
        /// </summary>
        Consultation meteo = new Consultation();
        String ville = "Montpellier";
        String pays = "France";
        public BlankPage()
        {
            this.InitializeComponent();

            rechargerInfo("Montpellier","france");
            
            VillesEdit.Visibility = Windows.UI.Xaml.Visibility.Collapsed;
            ElementsEdit.Visibility = Windows.UI.Xaml.Visibility.Collapsed;

            //AfficheDetails.Visibility = Windows.UI.Xaml.Visibility.Collapsed;
        }

        /// <summary>
        /// Invoked when this page is about to be displayed in a Frame.
        /// </summary>
        /// <param name="e">Event data that describes how this page was reached.  The Parameter
        /// property is typically used to configure the page.</param>
        protected override void OnNavigatedTo(NavigationEventArgs e)
        {
        }
        /// <summary>
        /// on cliquant sur changer la localité
        /// </summary>
        /// <param name="sender"></param>
        /// <param name="e"></param>
        private void LoadButton_Click(object sender, RoutedEventArgs e)
        {
            meteo.recupereVillesPays();

            AfficheDetails.Visibility = Windows.UI.Xaml.Visibility.Collapsed;
            VillesEdit.Visibility = Windows.UI.Xaml.Visibility.Collapsed;
            ElementsEdit.Visibility = Windows.UI.Xaml.Visibility.Visible;

            VillesEdit.Items.Clear();

            List<String> pays = meteo.recupererPays();
            pays.Sort();
            foreach (String ele in pays)
                ElementsEdit.Items.Add(ele);
            
        }

        /// <summary>
        /// Mettre a jour les informations
        /// </summary>
        /// <param name="ville"></param>
        /// <param name="pays"></param>
        private void rechargerInfo(String ville, String pays)
        {
            if (meteo.consulter(ville, pays))
            {
                LocationEdit.Text = meteo.Valeurs.Location;
                TemperatureEdit.Text = meteo.Valeurs.Temperature;
                HumiditeEdit.Text = meteo.Valeurs.Humidite;
                TimeEdit.Text = meteo.Valeurs.Time;
                pressionEdit.Text = meteo.Valeurs.Pression;
                VentEdit.Text = meteo.Valeurs.Vent;

            }
            else
            {
                LocationEdit.Text = "Aucune Ville correspendante";
                TemperatureEdit.Visibility = Windows.UI.Xaml.Visibility.Collapsed;
                HumiditeEdit.Visibility = Windows.UI.Xaml.Visibility.Collapsed;
                TimeEdit.Visibility = Windows.UI.Xaml.Visibility.Collapsed;
                pressionEdit.Visibility = Windows.UI.Xaml.Visibility.Collapsed;
                VentEdit.Visibility = Windows.UI.Xaml.Visibility.Collapsed ;
            }
        
        }

        /// <summary>
        /// la selection d'un pays
        /// </summary>
        /// <param name="sender"></param>
        /// <param name="e"></param>
        private void ElementsEdit_SelectionChanged(object sender, SelectionChangedEventArgs e)
        {
            ElementsEdit.Visibility = Windows.UI.Xaml.Visibility.Collapsed;
            VillesEdit.Visibility = Windows.UI.Xaml.Visibility.Visible;
            String selected = (String)ElementsEdit.SelectedItem;
            List<String> villes = meteo.recupererVilles(selected);
            villes.Sort();
            foreach (String ele in villes)
                VillesEdit.Items.Add(ele);
        }


        /// <summary>
        /// Selection d'une ville
        /// </summary>
        /// <param name="sender"></param>
        /// <param name="e"></param>
        private void VillesEdit_SelectionChanged(object sender, SelectionChangedEventArgs e)
        {
            VillesEdit.Visibility = Windows.UI.Xaml.Visibility.Collapsed;
            AfficheDetails.Visibility = Windows.UI.Xaml.Visibility.Visible;

            pays = (String)ElementsEdit.SelectedItem;
            ville = (String)VillesEdit.SelectedItem;

            rechargerInfo(ville, pays);

        }

        
    }
}
