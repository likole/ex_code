#include<iostream>
using namespace std;
int main()
{
	float x;
	cin >> x;
	for (int i = 1; i <= 3; i++)
	{
		for (int j = 0; j < i; j++)
		{
			printf("%6.2f",x);
			if (j != i - 1)cout << " ";
		}
		cout << endl;
	}
	//cin.get();
	//cin.get();
	return 0;
}