using System;
using System.Collections.Generic;
using System.Text;

namespace ConvertirService
{
    public class Convertir
    {
        /// <summary>
        /// Attributes
        /// </summary>
        Convertion.ConvertTemperature con = new Convertion.ConvertTemperature();

        /// <summary>
        /// convertir de Fahrein to celesius
        /// </summary>
        /// <param name="x"></param>
        /// <returns>le degree in celluis</returns>
        public double convertireFahToCel(double x)
        {
            return con.ConvertTemp(x, Convertion.TemperatureUnit.degreeFahrenheit, Convertion.TemperatureUnit.degreeCelsius);
        }
        /// <summary>
        /// convertir fahrein to calvin
        /// </summary>
        /// <param name="x"></param>
        /// <returns>le degree en kalvin</returns>
        public double convertireFahToKalv(double x)
        {
            return con.ConvertTemp(x, Convertion.TemperatureUnit.degreeFahrenheit, Convertion.TemperatureUnit.kelvin);
        }


    }
}
