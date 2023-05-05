using System.ComponentModel.DataAnnotations;

namespace kolibg.Car.Dto
{
    public class Car_Brand
    {
        [Key]
        private int Id { get; set; }
        [Required]
        private BrandEnum BrandEnum { get; set; }
        private ICollection<Car_Model> Models { get; set; }

        public Car_Brand(int id, BrandEnum brandEnum, ICollection<Car_Model> models)
        {
            Id = id;
            BrandEnum = brandEnum;
            Models = models;
        }
    }
}
