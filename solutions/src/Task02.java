import java.util.Scanner;

public class Task02 {

    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        int T = in.nextInt();
        String garbage = in.nextLine();

        for(int i=0; i<T; i++) {
            String name = in.nextLine();
            if(name.equals("C3PO") || name.equals("R2D2")) {
                System.out.println(name + " isn't the droid we're looking for.");
            } else System.out.println(name + ", submit your vehicle for inspection.");
        }
    }

}
