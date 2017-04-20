import java.util.Scanner;

/**
 * Created by arnavgudibande on 2/17/17.
 */

public class task02 {

    public static String alpha = "abcdefghijklmnopqrstuvwxyz";

    public static void main(String args[]) {

        Scanner in = new Scanner(System.in);

        int N = in.nextInt();
        String x = in.nextLine();

        for(int a=0; a<N; a++) {
            String decrypt = in.nextLine();
            String sol = "";

            for(int i=0; i<decrypt.length(); i++) {
                if(Character.toString(decrypt.charAt(i)).equals(" ")) sol += " ";
                else sol += replace(Character.toString(decrypt.charAt(i)));
            }

            System.out.println(sol);
        }

    }

    public static String replace(String a) {
        int b = 25 - alpha.indexOf(a);
        return Character.toString(alpha.charAt(b));
    }

}
