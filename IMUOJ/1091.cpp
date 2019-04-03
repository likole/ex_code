#include<iostream>
using namespace std;
int main()
{
	for (int i = 10; i <= 1000; i++)
	{
		if (i % 7 == 0 && i % 3 == 0 && i % 2==0) cout << i << endl;
	}
	//cin.get();
	//cin.get();
	return 0;
}