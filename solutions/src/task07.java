import java.util.Map;
import java.util.Scanner;
import java.util.TreeMap;

public class task07 {

    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        int M = in.nextInt();
        int L = in.nextInt();
        String garbage = in.nextLine();

        Map<Integer, Integer> prisoners = new TreeMap<>();

        for(int i=0; i<L; i++) {
            String line = in.nextLine();
            String[] elements = line.split(" ");
            prisoners.put(Integer.parseInt(elements[2]), Integer.parseInt(elements[1]));
        }

        for(int j=0; j<M; j++) {
            Map.Entry<Integer,Integer> entry = prisoners.entrySet().iterator().next();
            System.out.println(entry.getValue());
            prisoners.remove(entry.getKey());
        }

    }

}
