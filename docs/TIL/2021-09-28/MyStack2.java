import java.util.ArrayList;

public class MyStack2<T> {
    private T[] node;
    public int pointer = 0;

    public MyStack2(int stackSize) {
        node = (T[]) new Object[stackSize];
    }

    private void checkEmpty() {
        if (this.pointer == 0 && this.node[pointer] == null) System.exit(-1);
    }

    private boolean isFull() {
        return this.pointer == this.node.length - 1;
    }

    public T pop() {
        T top = this.top();
        this.node[pointer - 1] = null;

        return top;
    }

    public void push(T t) {
        this.node[pointer] = t;
        if (!this.isFull()) this.pointer += 1;
    }

    public T top() {
        this.checkEmpty();

        return node[this.pointer - 1];
    }

    public boolean empty() {
        return (this.pointer == 0 && this.node[pointer] == null);
    }

    public String toString() {

        return "";
    }
}

class MyStackTest2 {
    public static void main(String[] args) {
        MyStack2<Integer> myStack = new MyStack2<Integer>(5);

        myStack.push(1);
        System.out.println(myStack.top()); // 1
        myStack.push(2);
        myStack.push(3);
        System.out.println(myStack.top()); // 3
        System.out.println(myStack.pop()); // 3 and remove
        System.out.println(myStack.top()); // 2
    }
}