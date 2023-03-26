/**
 * Auto Generated Java Class.
 */
import java.util.Scanner;
public class Tehtava2_3 {
  
  
  public static void main(String[] args) {
    Scanner lukija = new Scanner(System.in);
    System.out.print("Anna merkkijono A: ");
    String mjonoA = lukija.nextLine();
    System.out.print("Anna merkkijono B: ");
    String mjonoB = lukija.nextLine();
    
    int count = 0;
    for(int i = mjonoA.length(); i >= 0; i--) {
      for(int j = mjonoB.length(); j >= 0; j = j--)
       if (mjonoA.charAt(i) == (mjonoB.charAt(j))) {
         count++;
         continue;
       }
    }
    System.out.println("Lukum‰‰r‰" + count);
  }

}
