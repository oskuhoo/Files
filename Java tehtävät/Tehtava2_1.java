/**
 * Auto Generated Java Class.
 */
import java.util.Scanner;
public class Tehtava2_1 {
  
  
  public static void main(String[] args) {
    Scanner lukija = new Scanner(System.in);
    System.out.println("Anna merkkijono 1: ");
    String mjono1 = lukija.nextLine();
    System.out.println("Anna merkkijono 2: ");
    String mjono2 = lukija.nextLine();
    System.out.println("Anna merkkijono 3: ");
    String mjono3 = lukija.nextLine();
    lukija.close();
    
    int mjono1p = mjono1.length();
    int mjono2p = mjono2.length();
    int mjono3p = mjono3.length();
    
    if (mjono1p > mjono2p && mjono1p < mjono3p || mjono1p > mjono3p && mjono1p < mjono2p) {
      System.out.println("Pituusjärjestyksessä keskimmäinen: " + mjono1);
    } else if (mjono2p > mjono1p && mjono2p < mjono3p || mjono2p > mjono3p && mjono2p < mjono1p) {
      System.out.println("Pituusjärjestyksessä keskimmäinen: " + mjono2);
    } else {
      System.out.println("Pituusjärjestyksessä keskimmäinen: " + mjono3);
    }
  }
  
}
