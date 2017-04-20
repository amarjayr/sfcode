import java.util.Scanner;

public class Task05 {

    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        int T = in.nextInt();
        for(int i=0; i<T; i++) System.out.println(isPrime(in.nextInt()));
    }

    public static boolean isPrime(int n) {
        if(n > 2 && (n & 1) == 0) return false;
        for(int i = 3; i * i <= n; i += 2) if (n % i == 0) return false;
        return true;
    }

}
