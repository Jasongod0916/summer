import java.util.Random;

public class Main
{
    public static void swap(int data[], int j, int i) {
        int temp = data[j];
        data[j] = data[j + 1];
        data[j + 1] = temp;
    }
    public static void bubble_sort(int data[]) {// 氣泡排序
        for (int i = 0; i < data.length - 1; i++) {
            for (int j = 0; j < data.length - i - 1; j++) {
                if (data[j] > data[j + 1]) {
                    swap(data, j, j + 1);
                }
            }
        }
        System.out.println("結果：");
        for(int x : data)System.out.print(x + " ");
    }
    public static void insert_sort(int data[]) {
        for (int a = 1; a < data.length; a++) {
            int key = data[a];
            int b = a - 1;
            while (b >= 0 && data[b] > key) {
                data[b + 1] = data[b];
                b--;
            }
            data[b + 1] = key;
        }
        System.out.println("結果：");
        for (int x : data) System.out.print(x + " ");
    }
    public static int person_min(int[] data, boolean[] c){
        int min = Integer.MAX_VALUE;
        int index = 0;
        for (int i = 0; i < data.length; i++) {
            if (!c[i] && data[i] < min) {
                min = data[i];
                index = i;
            }
        }
        c[index] = true;
        return index;
    }
    public static void person_sort(int data[],int data2[],boolean c[])
    {
        for (int i = 0; i < 20; i++) {
            int index = person_min(data, c);
            data2[i] = data[index];
        }
        System.out.println("結果：");
        for (int x : data2)
            System.out.print(x + " ");
    }
    public static void select_sort(int data[]) {
        for (int i = 0; i < data.length - 1; i++) {
            int min = i;
            for (int j = i + 1; j < data.length; j++) {
                if (data[j] < data[min]) {
                    min = j;
                }
            }
            int temp = data[i];
            data[i] = data[min];
            data[min] = temp;
        }
        System.out.println("結果：");
        for (int x : data) System.out.print(x + " ");
    }
    static  int sum(int data[],int i){
        if(i < 0)return 0;
        return data[i] + sum(data,i-1);
    }
    static  int binominal(int n,int m){
            return binominal(n-1,m) + binominal(n-1,m-1);
    }
    static  int factorial(int n){
        if (n == 0 || n == 1) {
            return 1;
        } else {
            return n * factorial(n - 1);
        }
    }
    public static int fibonacci(int n) {
        if (n == 1 || n == 2) {
            return 1;
        } else {
            return fibonacci(n-1) + fibonacci(n-2);
        }
    }
public static void main(String[] args) {
        Random ran = new Random();
        int[] data = new int[20];
        for (int i = 0; i < 20; i++)
            data[i] = ran.nextInt(100);
        //bubble_sort(data);
        //insert_sort(data);
        //int[] data2 = new int[20];
        //boolean[] c = new boolean[20];
        //person_sort(data,data2,c);
        ///select_sort(data);
        System.out.println(sum(data,19));
        System.out.println(factorial(5));
        System.out.println(fibonacci(10));
        System.out.println(binominal(1,2));
    }
}
