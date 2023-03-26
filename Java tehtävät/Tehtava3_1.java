/**
 * Auto Generated Java Class.
 */
import java.util.Scanner;
public class Tehtava3_1 {
  
  public static boolean onkoPalindromi(String mjono) {
    boolean palindromi = false;
    String mjono2 = "";
    for (int i = mjono.length() - 1; i >= 0; i--) {
      mjono2 = mjono2 + mjono.charAt(i);
      if (mjono.equals(mjono2)) {
        palindromi = true;
      }else {
        palindromi = false;
      }
      }
    return palindromi;
    }
  
  
  public static void main(String[] args) { 
    
    Scanner lukija = new Scanner(System.in);
    System.out.println("Anna merkkijono: ");
    String mjono = lukija.nextLine();
    lukija.close();
    System.out.println("Merkkijono on palindromi: " + onkoPalindromi(mjono));
    
  }
  
}
