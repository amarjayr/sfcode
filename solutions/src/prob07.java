import java.util.*;

public class Prob07
{
    public static void main(String[] args)
    {
        Scanner read = new Scanner(System.in);
        int n = read.nextInt();
        int vp = 0;
        int dy = 11;
        int y = 45;
        for(int t = 1; t<=n;t++)
        {
            int a = read.nextInt();
            int k = read.nextInt();
            int v = read.nextInt();
            double p = 0;
            for(int j = (y-dy); j < (y+dy); j++)
            {
                if(j>0 && j<90 && (j<(a-k)||j>(a+k)))
                {
                    double temp = 0;
                    for(int i = 0; i<t;i++)
                    {
                        temp+=Math.sin(i*a);
                    }
                    temp/=j;
                    temp*=(400.0/(v*k));
                    if(temp>p) p = temp;
                }
            }
            dy = v+8;
            System.out.println(p);
        }
    }
}
