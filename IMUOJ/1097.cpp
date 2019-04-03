#include<iostream>
using namespace std;
int main()
{
	for (int x = 100; x <=1233; x++)
	{
		int y = 1333 - x;
		if ((x % 10 ==y/100)&&(y%10==x/100)&&(x/10%10==y/10%10))
		{
			cout << x << "+" << y << "=1333\n";
		}
	}
	//cin.get();
	//cin.get();
	return 0;
}