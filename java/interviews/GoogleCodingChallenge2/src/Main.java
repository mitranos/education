import java.util.*;

public class Main {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		String text = 
				  "dir1\n"
				+ " dir11\n"
				+ " dir12\n"
				+ "  picture.jpeg\n"
				+ "  dir121\n"
				+ "  file1.png\n"
				+ "dir2\n"
				+ " dir21\n"
				+ "	 dir211\n"
				+ " file2.gif\n"
				+ "dir3\n"
				+ " longpicturetext3.gif\n"
				+ " dir31\n"
				+ "  file4.jpeg\n"
				+ "  dir311\n"
				+ "   file5.txt\n"
				+ "   file6.txt\n"
				+ "   file7.png\n"
				+ "  dir312\n"
				+ "   dir3121\n"
				+ "    dir31211\n"
				+ "     file8.png\n"
				+ "dir4\n"
				+ " file9.png\n"
				+ "file10.jpeg";
		System.out.println(solution(text));
	}


	public static int solution(String S) {
		ArrayList<String> listLines = new ArrayList<String>(Arrays.asList(S.split("\\r?\\n")));
		ArrayList<Integer> paths = new ArrayList<Integer>();
		ArrayList<Integer> integers = findImages(listLines);


		for(int i = 0; i < integers.size(); i++){
			paths.add(createPath(listLines, integers.get(i)).length());
		}

		return largest(paths);
	}

	public static ArrayList<Integer> findImages(ArrayList<String> list){
		ArrayList<Integer> ints = new ArrayList<Integer>();
		for(int i =0; i < list.size(); i++){
			if(list.get(i).contains(".jpeg") || list.get(i).contains(".png") || list.get(i).contains(".gif")){
				ints.add(i);
			}
		}
		return ints;
	}


	public static int countSpaces(String s){
		int spaces = 0;
		for(int i=0; i < s.length(); i++){
			if(s.charAt(i) == ' '){
				spaces++;
			}else{
				break;
			}
		}
		return spaces;
	}

	public static String createPath(ArrayList<String> list, int position){
		String str = list.get(position);
		int spaces = countSpaces(str);
		String path2 = str.substring(spaces);
		String path = "";
		spaces --;
		for(int i = position -1 ; spaces >= 0; i--){
			//System.out.println(spaces);
			if(spaces > 0 && list.get(i).charAt(spaces-1) == ' ' && list.get(i).charAt(spaces) != ' ' && 
					!(list.get(i).contains(".jpeg") || list.get(i).contains(".png") || list.get(i).contains(".gif"))){
				path = "/" + list.get(i).replace(" ", "") + path;
				spaces--;
			} else if(spaces == 0 && list.get(i).charAt(spaces) != ' ' && list.get(i).charAt(spaces+1) != ' '){
				path = '/' + list.get(i) + path;
				spaces--;
			}
		}
		System.out.println(path + '/' + path2);
		return path + '/' + path2;
	}

	public static int largest(ArrayList<Integer> list){
		Collections.sort(list);
		return list.get(list.size() - 1);
	}
}
