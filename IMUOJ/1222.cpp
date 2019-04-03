#include<iostream>
using namespace std;
int main()
{
	int a, b,ans[100];
	while (cin >> a >> b)
	{
		int num = 0;
		if (a == 0 && b == 0)break;
		for (int i = a*100; i < (a+1)*100; i++)
		{
			if (i%b == 0)
			{
				ans[num] = i % 100;
				num++;
			}
		}
		for (int i = 0; i < num; i++)
		{
			if (ans[i] / 10 < 1)cout << '0';
			cout << ans[i];
			if (i != num - 1)cout << " ";
		}
		cout << endl;
	}
	return 0;
}