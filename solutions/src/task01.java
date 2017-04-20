import java.util.Scanner;

public class task01 {

    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);

        int N = in.nextInt();
        String x = in.nextLine();

        for(int a=0; a<N; a++) {
            int num = in.nextInt();
            double k = Double.parseDouble(in.nextLine());

            double result = num/k;

            System.out.printf("%.2f", result);
            System.out.println();
        }
    }

}
