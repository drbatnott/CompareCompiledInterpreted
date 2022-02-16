using System;
using System.IO;

namespace DemoCompiledMethod
{
    class Program
    {
        static void Main(string[] args)
        {
            TextReader textReader = new StreamReader("products.csv");
            string input;
            while ((input = textReader.ReadLine()) != null)
            {
                Console.WriteLine("Input is " + input);
                string[] parts = input.Split(',');
                Console.WriteLine("First Part is " + parts[0]);
                Console.WriteLine("Second Part is " + parts[1]);
                int i=0;
                if (parts.Length > 3)
                {
                    for(int j = 2; j< parts.Length; j++)
                    {
                        i += Convert.ToInt32(parts[j]) * (int)Math.Pow(10, j - 2);
                    }
                     
                }
                else
                {
                    i = Convert.ToInt32(parts[2]);
                }
                Console.WriteLine("Parts cost " + i);
            }
            textReader.Close();
        }
    }
}
