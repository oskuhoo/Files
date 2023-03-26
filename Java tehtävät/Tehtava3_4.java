/**
 * Auto Generated Java Class.
 */
import java.util.Scanner;
public class Tehtava3_4 {
  
  public static boolean onkoPalindromi(String mjonoM) {
    boolean palindromi = false;
    String mjonoM2 = "";
    
    for (int i = mjonoM.length() - 1; i >= 0; i--) {
      mjonoM2 = mjonoM2 + mjonoM.charAt(i);
      if (mjonoM.equals(mjonoM2)) {
        palindromi = true;
      }else {
        palindromi = false;
      }
      }
    return palindromi;
    }
  
  public static boolean onkoPalindromi(int mjonoK) {
    boolean palindromi = false;
    String mjonoKS = "" + mjonoK;
    String mjonoK2 = "";
    
    for (int i = mjonoKS.length() - 1; i >= 0; i--) {
      mjonoK2 = mjonoK2 + mjonoKS.charAt(i);
      if (mjonoKS.equals(mjonoK2)) {
        palindromi = true;
      }else {
        palindromi = false;
      }
      }
    return palindromi;
  }
  
  public static boolean onkoPalindromi(double mjonoL) {
    boolean palindromi = false;
    String mjonoLS = "" + mjonoL;
    String mjonoL2 = "";
    
    for (int i = mjonoLS.length() - 1; i >= 0; i--) {
      mjonoL2 = mjonoL2 + mjonoLS.charAt(i);
      if (mjonoLS.equals(mjonoL2)) {
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
    String mjonoM = lukija.nextLine();
    System.out.println("Anna kokonaisluku: ");
    String mjonoK = lukija.nextLine();
    System.out.println("Anna liukuluku: ");
    String mjonoL = lukija.nextLine();
    
    System.out.println("Merkkijono on palindromi: " + onkoPalindromi(mjonoM));
    System.out.println("Kokonaisluku on palindromi: " + onkoPalindromi(mjonoK));
    System.out.println("Liukuluku on palindromi: " + onkoPalindromi(mjonoL));
    
    lukija.close();
  }
  
}