#include<iostream>
using namespace std;
int stack[1000], top = 0;
void fin(int a)
{
	stack[top++] = a;
}
int fout()
{
	if (top > 0)
	{
		top--;
		return stack[top];
	}
	else
	{
		return -1;
	}
}
void show()
{
	if (top == 0)cout << "empty\n";
	else
	{
		for (int i = 0; i < top; i++)
		{
			cout << stack[i];
			if (i != top - 1)cout << " ";
		}
		cout << endl;
	}
}
int main()
{
	int code;
	while (cin >> code)
	{
		if (code == 1)
		{
			int n;
			cin >> n;
			fin(n);
		}
		else if (code == 2)
		{
			int n = fout();
			if (n == -1)cout << "empty\n";
			else cout << n<<endl;
		}
		else
		{
			show();
		}
	}
}