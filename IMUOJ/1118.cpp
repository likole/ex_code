#include<iostream>
using namespace std;
int main()
{
	for (int a = 1; a <= 3000; a++)
	{
		int b=0,tmp=0;
		for (int j = 1; j < a; j++)
		{
			if (a%j == 0) b += j;
		}
		for (int j = 1; j <b; j++)
		{
			if (b%j == 0)tmp += j;
		}
		if (a == tmp&&a < b) cout << "(" << a << "," << b << ")";
	}
	//cin.get();
	//cin.get();
	return 0;
}