import java.util.LinkedList;
import java.util.Queue;
import java.util.Scanner;

public class Solo {
	
	static int N; 
	static int M;
	
	static boolean[][] been;
	
	public static class State {
		int y;
		int x;
		String path;
		public State(int y, int x, String path) {
			super();
			this.y = y;
			this.x = x;
			this.path = path;
		} 
		
	}
	
    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        N = in.nextInt();
        M = in.nextInt();
        
        been = new boolean[N][M];
        
        State initial = null;
        char[][] map = new char[N][M];
        for (int i = 0; i < N; i++) {
        	String row = in.next();
        	for (int j = 0; j < M; j++) {
        		map[i][j] = row.charAt(j);
        		if (map[i][j] == '*') {
        			initial = new State(i, j, "");
        		}
        	}
        }
        
        Queue<State> q = new LinkedList<State>();
        q.add(initial);
        boolean escaped = false;
        
        while(!q.isEmpty()) {
        	State s = q.remove();
        	if (been[s.y][s.x]) {
        		continue;
        	}
        	been[s.y][s.x] = true;
        	if (finished(s)) {
        		System.out.println(s.path);
        		escaped = true;
        		break;
        	}
        	if (map[s.y+1][s.x] == '-') {
        		q.add(new State(s.y + 1, s.x, s.path + "S"));
        	}
        	if (map[s.y][s.x+1] == '-') {
        		q.add(new State(s.y, s.x + 1, s.path + "E"));
        	}
        	if (map[s.y-1][s.x] == '-') {
        		q.add(new State(s.y - 1, s.x, s.path + "N"));
        	}
        	if (map[s.y][s.x-1] == '-') {
        		q.add(new State(s.y, s.x - 1, s.path + "W"));
        	}
        }
        
        if (!escaped) {
        	System.out.println("Goodluck");
        }
        
        
    }
    
    public static boolean finished(State s) {
    	if (s.y == 0 || s.y == N-1)
    		return true;
    	if (s.x == 0 || s.x == M-1)
    		return true;
    	return false;
    }
    

}
