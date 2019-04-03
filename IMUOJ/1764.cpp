#include<iostream>
using namespace std;
int main()
{
	int x, y,ans[1000],index=0;
	cin >> x >> y;
	int a, b;
	a = x < y ? x : y;
	b = x > y ? x : y;
	for (int i = a; i <= b; i++)
	{
		int flag = 1;
		for (int j = 2; j < i; j++)
		{
			if (i%j == 0)flag = 0;
		}
		if (flag)ans[index++] = i;
	}
	for (int i = 0; i < index; i++)
	{
		cout << ans[i];
		if (i != index - 1) cout << " ";
	}
	//cin.get();
	//cin.get();
	return 0;
}