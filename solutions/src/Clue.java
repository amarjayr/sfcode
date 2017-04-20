import java.util.Scanner;
import java.util.ArrayList;

public class Clue
{
    public static void main(String[] args)
    {
        Scanner read = new Scanner(System.in);
        ArrayList<String> suspects = new ArrayList<>();
        ArrayList<String> weapons = new ArrayList<>();
        ArrayList<String> locations = new ArrayList<>();
        String suspect = read.nextLine();
        suspect = suspect.substring(15,suspect.length()-2);
        String weapon = read.nextLine();
        weapon = weapon.substring(14,weapon.length()-2);
        String location = read.nextLine();
        location = location.substring(16,location.length()-2);

        for(String i : suspect.split("\\] \\["))
        {
            suspects.add(i);
        }

        for(String i : weapon.split("\\] \\["))
        {
            weapons.add(i);
        }

        for(String i : location.split("\\] \\["))
        {
            locations.add(i);
        }

        class Rule{
            String rq1,rq2,re;
            public Rule(String condition1, String condition2, String result)
            {
                rq1 = condition1;
                rq2 = condition2;
                re = result;
            }

            public boolean eval()
            {
                boolean rq1s = (suspects.contains(rq1));
                boolean rq1w = (weapons.contains(rq1));
                boolean rq1l = (locations.contains(rq1));
                boolean rq2s = (suspects.contains(rq2));
                boolean rq2w = (weapons.contains(rq2));
                boolean rq2l = (locations.contains(rq2));

                boolean rq1e = (rq1s || rq1w || rq1l);
                boolean rq1f = (((suspects.size()==1) && rq1s) || ((weapons.size()==1) && rq1w) || ((locations.size()==1) && rq1l));
                boolean rq2e = (rq2s || rq2w || rq2l);
                boolean rq2f = (((suspects.size()==1) && rq2s) || ((weapons.size()==1) && rq2w) || ((locations.size()==1) && rq2l));

                boolean pos = false;
                boolean result = false;

                if((!(rq1e)) && (!(rq2e))) 
                {
                    pos = true;
                }

                if(rq1f && rq2f) 
                {
                    result = true;
                    pos = true;
                }

                String clue = re;

                if(pos)
                {
                    if(result)
                    {
                        if(suspects.contains(clue))
                        {
                            suspects.clear();
                            suspects.add(clue);
                        }
                        else
                        if(weapons.contains(clue))
                        {
                            weapons.clear();
                            weapons.add(clue);
                        }
                        else
                        if(locations.contains(clue))
                        {
                            locations.clear();
                            locations.add(clue);
                        }
                    }
                    else
                    {
                        if(suspects.contains(clue)) suspects.remove(clue);
                        else if(weapons.contains(clue)) weapons.remove(clue);
                        else if(locations.contains(clue)) locations.remove(clue);
                    } 
                }

                if(suspects.size()==1&&weapons.size()==1&&locations.size()==1) return true;
                else return false;
            }
        }
        ArrayList<Rule> rules = new ArrayList<>();
        String in = read.nextLine();
        while(!in.contains("[yes]")&&!in.contains("[no]"))
        {
            in = in.substring(2,in.length() - 2);
            rules.add(new Rule(in.substring(0,in.indexOf("], [")),in.substring(in.indexOf("], [")+4,in.indexOf("] => [")) , in.substring(in.indexOf("] => [")+6)));
            in = read.nextLine();
        }
        int cluenum = 1;
        while(true)
        {
            in = in.substring(2, in.length()-2);
            boolean pos = false;
            String clue = "";
            if(in.startsWith("no]"))
            {
                pos = false;
                clue = in.substring(5);
            }

            if(in.startsWith("yes]"))
            {
                pos = true;
                clue = in.substring(6);
            }

            if(pos)
            {
                if(suspects.contains(clue))
                {
                    suspects.clear();
                    suspects.add(clue);
                }
                else
                if(weapons.contains(clue))
                {
                    weapons.clear();
                    weapons.add(clue);
                }
                else
                if(locations.contains(clue))
                {
                    locations.clear();
                    locations.add(clue);
                }
            }
            else
            {
                if(suspects.contains(clue)) suspects.remove(clue);
                else if(weapons.contains(clue)) weapons.remove(clue);
                else if(locations.contains(clue)) locations.remove(clue);
            }

            for(Rule r : rules)
            {
                if(r.eval())
                {
                    System.out.println("{["+cluenum+"] ["+suspects.get(0)+"] ["+weapons.get(0)+"] ["+locations.get(0)+"]}");
                    return;
                }
            }
            cluenum++;
            in = read.nextLine();
        }
    }
}
