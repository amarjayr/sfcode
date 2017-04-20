import java.util.Scanner;

public class Task06 {

    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        int T = in.nextInt();
        String garbage = in.nextLine();

        for(int i=0; i<T; i++) {
            String serial = in.nextLine();
            String[] parts = serial.split("");
            int[] serialparts = new int[parts.length];
            for(int j=0; j<parts.length; j++) serialparts[j] = Integer.parseInt(parts[j]);

            int evenSum, oddSum;
            evenSum = oddSum = 0;

            for(int b=0; b<serialparts.length; b+=2) evenSum+=serialparts[b];

            for(int o=1; o<serialparts.length; o+=2) {
                int x = serialparts[o]*2;
                if(x>=10) {
                    oddSum += x/10 + x%10;
                } else {
                    oddSum += x;
                }
            }

            if(((evenSum+oddSum) % 2)==0) System.out.println("true");
            else System.out.println("false");
        }
    }

}
