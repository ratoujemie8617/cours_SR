using System;
using System.Text;
using System.Security.Cryptography;

namespace appliHachage
{
    class Program
    {
        static void Main(string[] args)
        {
            
            Console.WriteLine("Message à transposer : ");
            string message = Console.ReadLine();
            
            // instanciation de la classe hachage
            Hachage h1 = new Hachage(message);

            // appel de la méthode de hachage
            h1.Hash(message);
        }
    }
}
