import java.util.*;

public class task11 {
	
	static class Point{
		public int x,y;
		public Point(int a, int b) {
			x = a;
			y = b;
		}
		public String toString() {
			return "(" + x + ", " + y + ")";
		}
	}
	
	static class Edge implements Comparable{
		int a; int b; int weight;
		public Edge(int a, int b, int weight) {
			this.a = a;
			this.b = b;
			this.weight = weight;
		}

		public int compareTo(Object o) {
			if (((Edge) o).weight < this.weight) {
				return -1;
			} else {
				return 1;
			}
		}
		
		public String toString() {
			return String.format("(%d)-%d-(%d)", a, weight, b);
		}
	}
	
	static int[] parent;
	static int[] size;
	
	static void union(int a, int b) {
		if (size[a] < size[b]) {
			parent[find(a)] = b;
			size[b] += size[find(a)];
		}else {
			parent[find(b)] = a;
			size[a] += size[find(b)];
		}
	}
	
	static int find(int a) {
		if (parent[a] != a) {
			int ret =  find(parent[a]);
			parent[a] = ret;
			return ret;
		}
		return a;
	}
	
	static int kruskals(List<Edge> edges, int n) {
		PriorityQueue<Edge> q = new PriorityQueue<Edge>(edges);
		
		parent = new int[n];
		size = new int[n];
		
		for (int i = 0; i < n; i++) {
			parent[i] = i;
			size[i] = 1;
		}
		
		int ret = 0;
		
		while(!q.isEmpty()) {
			Edge e = q.remove();
			if (find(e.a) != find(e.b)) {
				union(e.a, e.b);
				ret += e.weight;
			}
		}
		
		return ret;
	}
	
	public static void main(String[] args) throws Exception {
		Scanner in = new Scanner(System.in);
		
		int N = in.nextInt();
		Point[] loc = new Point[N];
		
		for (int i = 0; i < N; i++) {
			loc[i] = new Point(in.nextInt(), in.nextInt());
		}
		
		List<Edge> edges = new ArrayList<Edge>();
		for (int i = 0; i < N; i++) {
			for (int j = 0; j < N; j++) {
				if (i != j) {
					int weight = (loc[i].x - loc[j].x)*(loc[i].x - loc[j].x) + (loc[i].y - loc[j].y)*(loc[i].y - loc[j].y);
					edges.add(new Edge(i, j, weight));
				}
			}
		}
		
		System.out.println(kruskals(edges, N));
	}
}

