using System.ComponentModel.DataAnnotations;

namespace kolibg.Car.Dto
{
    public class AdminUser
    {
        [Key]
        private int Id;
        [Required]
        private string Username { get; set; }
        [Required]
        private string Password { get; set; }

        public AdminUser(int id, string username, string password)
        {
            Id = id;
            Username = username;
            Password = password;
        }
    }
}
