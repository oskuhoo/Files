/**
 * Auto Generated Java Class.
 */
import java.util.Scanner;
public class Tehtava3_3 {
  
  public static String poistaPerakkaiset(String mjono) {
    String uusiMjono = "";
    for (int i = 0; i < mjono.length() - 1; i++) {
      if (i == 0) {
        uusiMjono = "" + mjono.charAt(i);
        }
      else if (mjono.charAt(i-1) != mjono.charAt(i)) {
        uusiMjono = uusiMjono + mjono.charAt(i);
      }
    }
    return uusiMjono;
  }
  
  public static void main(String[] args) { 
    Scanner lukija = new Scanner(System.in);
    String mjono = lukija.nextLine();
    lukija.close();
    
    System.out.println("Syötteen " + mjono + " uusi syöte on " + poistaPerakkaiset(mjono));
  }

  
}
