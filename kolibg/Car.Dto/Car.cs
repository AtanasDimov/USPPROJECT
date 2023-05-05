using System.ComponentModel.DataAnnotations;
using System.Reflection.Metadata;

namespace kolibg.Car.Dto
{
    
   public class Car
    {
        [Key]
        private int Id { get; set; }
        [Required]
        private Car_Brand Brand { get; set; }
        [Required]
        private Car_Chasis Chasis { get; set; }
        [Required]
        private Car_Fuel FuelType { get; set; }
        [Required]
        private Car_Color Color { get; set; }
        [Required]
        private int Mileage { get; set; }
        [Required]
        private int ProdYear { get; set; }
        [Required]
        private int HorsePower { get; set; }
        [Required]
        private float Price { get; set; }
        [Required]
        private Car_Transmision Transmision { get; set; }
        [Required]
        private string Information { get; set; }
        [Required]
        private Blob Picture { get; set; }

        public Car(int id, Car_Brand brand, Car_Chasis chasis, Car_Fuel fuelType, Car_Color color, int mileage, int prodYear, int horsePower, float price, Car_Transmision transmision, string information, Blob picture)
        {
            Id = id;
            Brand = brand;
            Chasis = chasis;
            FuelType = fuelType;
            Color = color;
            Mileage = mileage;
            ProdYear = prodYear;
            HorsePower = horsePower;
            Price = price;
            Transmision = transmision;
            Information = information;
            Picture = picture;
        }
    }
}
