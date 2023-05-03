namespace kolibg.Car.Dto
{
    public class AdminUser
    {
        public string Username { get; set; }
        public string Password { get; set; }
        

        public AdminUser(string username, string password)
        {
            Username = username;
            Password = password;
        }
    }
}
