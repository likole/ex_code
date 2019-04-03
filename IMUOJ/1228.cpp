#include<iostream>
using namespace std;
int main()
{
	int a, b,max;
	cin >> a >> b;
	max = a > b ? a : b;
	for (int i = max; i <= a*b; i++)
	{
		if(i%a==0&&i%b==0)
		{
			cout << i << endl;
			break;
		}
	}
	//cin.get();
	//cin.get();
	return 0;
}