#include<iostream>
using namespace std;
int main()
{
	int n ;
	while (cin >> n)
	{
		int ans[10] = { 0 };
		n -= 265716;
		int index = 0;
		while (n)
		{
			ans[index++] = n % 3;
			n /= 3;
		}
		for (int i = 0; i < 10; i++)
		{
			cout << 9 + ans[i];
			if (i != 9)cout << " ";
		}
		cout << endl;
	}
}