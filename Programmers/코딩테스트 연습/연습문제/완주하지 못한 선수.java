import java.util.ArrayList;
import java.util.Iterator;

class Solution {
    public String solution(String[] participant, String[] completion) {
        String answer = "";
        String n = "\n";

        int pLen = participant.length;
        int cLen = completion.length;

        for( int i = 0; i < cLen; i++ )
        {
            int location = is_in(completion[i], participant);
            if( location >= 0 )
            {
                participant[location] = "N";
                completion[i] = "";
            }
        }

        for( int i = 0; i < pLen; i++ )
        {
            if( !participant[i].equalsIgnoreCase("N") ) answer = participant[i];
        }
        return answer;

        /*
        int plen = participant.length;
        int clen = completion.length;

        ArrayList<String> man = new ArrayList<>();
        ArrayList<Integer> is_in = new ArrayList<>();   // 탐색 안함 리스트
        for( int i = 0; i < plen; i++ ) man.add(participant[i]);

        boolean next_value = false;
        boolean removed = false;


        answer += log(' ', "# Program Start !");
        int i = 0;
        while( man.size() > 1)
        //for( int i = 0; i < mLen; i++ )
        {
            answer += log(' ', "man.size() = "+man.size());
            for(int j = 0; j < clen; j++ )
            {
                answer += log(' ', ("i="+i)+", "+("j="+j)+", r="+removed);


                for( int k = 0; k < is_in.size(); k++ ) // 완주자에서 검색
                {
                    answer += log('p', ("i="+i)+", "+("j="+j)+", "+("k="+k)+"("+is_in.get(k)+")");
                    if( j == is_in.get(k) ){ // 이번에 들어온 j가 이미 탐색이 되었다면
                        answer += log('s', "next_value=true");
                        next_value = true;    // 다음값으로 넘겨야 하므로 true
                    }
                }

                if( next_value )        // 이미 완주한 값이라 다음값으로 넘겨야 하면 true
                {
                    next_value = false; // 다음값을 위해 flag 초기화
                    continue;           // 다음 값으로 넘겨
                }

                if( man.get(i).equalsIgnoreCase(completion[j]) )
                {
                    answer += log('t', "man="+i+"("+man.get(i)+"), j="+j+"("+completion[j]+")");
                    man.remove(i);  // 배열에서 현재 값을 제거(완주 한사람)
                    is_in.add(j);   // 완주 한사람은 두번째 배열에서 탐색 안함
                    removed = true; // 발견했으면 i는 현재위치지만, 값은 다음값이 옴(remove 되니까)
                }else
                    answer += log('f', "man="+i+"("+man.get(i)+"), j="+j+"("+completion[j]+")");

                if( removed )
                {
                    answer += log('R', ("i="+i)+", "+("j="+j));
                    i--;
                    removed = false;
                    break;
                }
            }
            i++;
        }
        answer += log(' ', "# Program End ! ans="+man.get(0)+"\n");

        return man.get(0);
        //return answer;
        */
    }

    static int is_in( String temp, String arr[] )
    {
        for( int i = 0; i < arr.length; i++ )
        {
            if( temp.equalsIgnoreCase(arr[i]) ) return i;
        }
        return -1;
    }

    static String log( char type, String msg )
    {
        return "\n["+Character.toUpperCase(type)+"] "+msg;
    }
}