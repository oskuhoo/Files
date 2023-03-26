/**
 * Auto Generated Java Class.
 */
import java.util.Scanner;
public class Tehtava2_2 {
  
  
  public static void main(String[] args) { 
    Scanner lukija = new Scanner(System.in);
    System.out.print("Anna kokonaisluku: ");
    int luku = lukija.nextInt();
    
    int kertoma = 1;
    for (int i = 1; i <= luku ; i++) {
      kertoma = kertoma * i;
    }
    System.out.println("Kertoma: " + kertoma);
  }
  
}
