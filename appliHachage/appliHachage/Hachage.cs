using System;
using System.Text;
using System.Security.Cryptography;

namespace appliHachage
{
    class Hachage {
        public string chaine_depart;

    public Hachage(string chaine_depart)
    {
        this.chaine_depart = chaine_depart;
    }
    
    public void Hash(string chaine_depart) {
        byte[] data = Encoding.UTF8.GetBytes(chaine_depart);
        
        using (SHA256 sha256Hash = SHA256.Create()) {
            byte[] hash = sha256Hash.ComputeHash(data);
            StringBuilder stringBuilder = new StringBuilder();
            for (int i = 0; i < hash.Length; i++) {
                stringBuilder.Append(hash[i].ToString("x2"));
            }
            
            Console.WriteLine(stringBuilder.ToString());
        }
    }
    }
}