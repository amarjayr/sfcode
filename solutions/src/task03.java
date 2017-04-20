//import java.util.ArrayList;
//import java.util.Collections;
//import java.util.HashMap;
//import java.util.Scanner;
//
//public class task03 {
//    public static void main(String[] args) {
//        HashMap<Integer, String> planets = new HashMap<>();
//        planets.put(0, "Hoth");
//        planets.put(1, "Jakku");
//        planets.put(2, "Tatooine");
//        planets.put(3, "Dagobah");
//        planets.put(4, "Kashyyyk");
//
//        Scanner in = new Scanner(System.in);
//
//        int rawVote = in.nextInt();
//        ArrayList<Integer> votes = new ArrayList<>();
//
//        for (int i; rawVote > 0; i++) {
//            i = rawVote % 10;
//            votes.add(Integer.parseInt(rawVote.substring(i, i + 1)));
//            rawVote /= 10;
//        }
//
//        ArrayList<Integer> frequencies = new ArrayList<>();
//        ArrayList<Integer> winners = new ArrayList<>();
//
//        for (int j = 0; j < 5; j++) {
//            frequencies.add(Collections.frequency(votes, j));
//        }
//
//        int max = 0;
//        for (int i = 0; i < frequencies.size(); i++) {
//            if (frequencies.get(i) > max) {
//                winners.clear();
//                winners.add(i);
//                max = frequencies.get(i);
//            } else if (frequencies.get(i) == max) winners.add(i);
//        }
//
//        for (int i = 0; i < winners.size(); i++) System.out.print(planets.get(winners.get(i)) + " ");
//    }
//}
