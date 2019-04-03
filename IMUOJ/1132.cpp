#include<iostream>
using namespace std;
int main()
{
	for (int i = 1000; i < 10000; i++)
	{
		int a = i / 100;
		int b = i % 100;
		if (i == (a + b)*(a + b))cout << i << "  ";
	}
	//cin.get();
	//cin.get();
	return 0;
}