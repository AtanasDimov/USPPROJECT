namespace kolibg.Car.Dto
{
    public class Car_Model
    {
        public int Id { get; set; } 
        public string Name { get; set; }
        public int BrandId { get; set; }
        public Car_Brand Brand { get; set; }

        public Car_Model(int id, string name, int brandId, Car_Brand brand)
        {
            Id = id;
            Name = name;
            BrandId = brandId;
            Brand = brand;
        }
    }
}
