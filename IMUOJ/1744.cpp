#include<iostream>
using namespace std;
int main()
{
	char c;
	cin >> c;
	for (char i = 'A'; i <=c; i++)
	{
		for (int j = 0; j < c-i; j++)
		{
			cout << " ";
		}
		for (int j = 0; j < 2*(i-65)+1; j++)
		{
			cout << i;
		}
		cout << endl;
	}
	return 0;
}