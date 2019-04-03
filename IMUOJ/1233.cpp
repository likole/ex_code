#include<iostream>
using namespace std;
int main()
{
	int x;
	cin >> x;
	int flag = 1;
	if (x==1)
	{
		flag=0;
	}
	else
	{
		for (int i = 2; i < x; i++)
		{
			if (x%i == 0)flag = 0;
		}
	}
	if (flag)cout << "Y" << endl;
	else cout << "N" << endl;
	//cin.get();
	//cin.get();
	return 0;
}