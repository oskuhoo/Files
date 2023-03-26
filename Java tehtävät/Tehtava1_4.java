/**
 * Auto Generated Java Class.
 */
import java.util.Scanner;
public class Tehtava1_4 {
  
  
  public static void main(String[] args) { 
    Scanner lukija = new Scanner(System.in);
    
    System.out.println("Anna A: ");
    String a = lukija.nextLine();
    
    System.out.println("Anna B: ");
    String b = lukija.nextLine();
    
    lukija.close();
    
    int i = a.indexOf(b, a.indexOf(b) + 1);
    System.out.println("Toisen esiintymän indeksi: " + i);
  }
  
}
