#include<iostream>
using namespace std;
int main()
{
	int count = 0,ans[100];
	for (int i = 100; i <= 200; i++)
	{
		int flag = 1;
		for (int j = 2; j < i; j++)
		{
			if (i%j==0)flag = 0;
		}
		if (flag)
		{
			ans[count] = i;
			count++;
		}
	}
	cout << count << endl;
	for (int i = 0; i < count; i++)
	{
		cout << ans[i];
		if (i != count - 1)cout << " ";
	}
	//cin.get();
	//cin.get();
	return 0;
}