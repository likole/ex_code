#include<iostream>
using namespace std;
int main()
{
	unsigned int n;
	int	count=0;
	while (cin >> n)
	{
		int bin[32];
		for (int i = 0; i < 32; i++)
		{
			bin[i] = 0;
		}
		int index = 0;
		while (n)
		{
			bin[index++] = n % 2;
			n /= 2;
		}
		int flag = 1;
		for (int i = 0; i < 16; i++)
		{
			if (bin[i] != bin[31 - i])
			{
				flag = 0;
				break;
			}
		}
		if (flag)count++;
	}
	cout << count << endl;
}